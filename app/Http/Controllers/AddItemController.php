<?php

namespace App\Http\Controllers;

use App\Models\AddItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class AddItemController extends Controller
{
    //

    public function add_item()
    {
        return view('add-item');
    }

    public function store(Request $request)
    {
        $fields = $request->validate([
            'item_name' => 'required|string',
            'item_price' => 'required',
            'item_image' => 'required|image:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('item_image')) {
            // Store the file and get its path
            $fields['item_image'] = $request->file('item_image')->store('product_image', 'public');

            $file = $request->file('item_image');

            // Generate the path where the file will be stored
            $filePath = 'product_image/' . $file->getClientOriginalName();

            // Check if the file already exists
            if (Storage::disk('public')->exists($filePath)) {
                Log::info('File already exists: ' . $filePath);
            } else {
                // Store the file and get its path
                $fields['item_image'] = $file->storeAs('product_image', $file->getClientOriginalName(), 'public');

                // Log the path of the stored file
                Log::info('Stored image path: ' . $fields['item_image']);
            }
        }

        AddItem::create($fields);

        return back()->with('success', 'Item added successfully');
    }
}
