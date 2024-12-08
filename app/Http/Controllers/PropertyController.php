<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Property;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function create()
    {
        // Define static features
        $features = [
            (object) ['id' => 1, 'name' => 'Gym'],
            (object) ['id' => 2, 'name' => 'Garden'],
            (object) ['id' => 3, 'name' => 'Garage'],
            (object) ['id' => 4, 'name' => 'Swimming Pool'],
        ];

        return view('properties.create', compact('features'));
    }

    public function store(Request $request)
    {
        // Ensure user is authenticated
        if (auth()->guest()) {
            return redirect()->route('login')->with('error', 'You must be logged in to add a property.');
        }

        // Continue with the property creation process
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'location' => 'required|string|max:255',
            'space' => 'required|numeric|min:0',
            'type' => 'required|in:apartment,house,office',
            'status' => 'required|in:for_sale,for_rent',
            'description' => 'required|string',
            // Add validation for other fields as needed
        ]);

        $user_id = auth()->id();
        // Create the property and associate it with the authenticated user
        $property = Property::create([
            'title' => $validated['title'],
            'price' => $validated['price'],
            'location' => $validated['location'],
            'space' => $validated['space'],
            'type' => $validated['type'],
            'status' => $validated['status'],
            'description' => $validated['description'],
            'user_id' => $user_id,
        ]);

        // Handle image uploads and save them to the images table
        if ($request->has('images')) {
            foreach ($request->file('images') as $image) {
                // Store the image in the public disk under the 'properties' folder
                $imagePath = $image->store('properties', 'public');

                // Create a new Image record and associate it with the property
                $property->images()->create([
                    'path' => $imagePath,
                ]);
            }
        }

        // Attach selected features to the property (with their IDs)
        if ($request->has('features')) {
            $property->features()->sync($request->features); // Using sync to associate features
        }

        // Redirect to the properties index page with a success message
        return redirect()->route('properties.index')->with('success', 'Property created successfully!');
    }





    public function index(Request $request)
    {
        $query = Property::query();

        // Filter by title (search by name)
        if ($request->filled('title')) {
            $query->where('title', 'like', '%' . $request->get('title') . '%');
        }

        // Filter by price range
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->get('min_price'));
        }

        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->get('max_price'));
        }

        // Filter by features
        if ($request->filled('features')) {
            $query->whereHas('features', function ($q) use ($request) {
                $q->whereIn('features.id', $request->get('features')); // Use 'features.id' to match with the pivot table
            });
        }

        // Get the filtered properties
        $properties = $query->paginate(10);

        // Fetch all features for the filter form
        $features = Feature::all(); // Fetch feature names and IDs dynamically

        return view('properties.index', compact('properties', 'features'));
    }



    public function show(Property $property)
    {
        // Return the property details to the view
        return view('properties.show', compact('property'));
    }
}
