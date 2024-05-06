<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GalleryImage;
use App\Models\SliderImg;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{

    public function manageGallery(){
        $data= GalleryImage::get();
        return view('auth/manage-gallery', compact('data'));   
    }


    public function uploadImage(Request $request)
    {
        // // Validate the request
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'type' => 'required',
        // ]);

        // Upload the image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $path = $image->storeAs('public/gallery', $imageName);

            // Save the file name in the database
            GalleryImage::create([
                'file_name' => $imageName,
                'category' => $request->type,
            ]);
        }

        // Redirect back with success message
        return redirect()->back()->with('success', 'Image uploaded successfully.');
    }

    public function editImage(Request $request)
    {
        // Validate the request
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'type' => 'required',
        // ]);

        // Delete the existing image if any
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $path = $image->storeAs('public/gallery', $imageName);

            // Save the new file name in the database
            GalleryImage::where('id', $request->id)
                ->update([
                    'file_name' => $imageName,
                    'category' => $request->type,
                ]);
        }

        // Redirect back with success message
        return redirect()->back()->with('success', 'Image updated successfully.');
    }

    public function deleteImage(Request $request)
    {
        // Delete the image file
        $id = $request->id;
        $image = GalleryImage::findOrFail($id);
        Storage::delete('public/gallery/'.$image->filename);

        // Delete the image record from the database
        $image->delete();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Image deleted successfully.');
    }

    public function manageSlider(){
        $data= SliderImg::get();
        return view('auth/manage-slider', compact('data'));   
    }


    public function addSliderImage(Request $request)
    {
        // Upload the image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $path = $image->storeAs('public/slider', $imageName);

            // Save the file name in the database
            SliderImg::create([
                'category' => $request->type,
                'file_name' => $imageName,
            ]);
        }

        // Redirect back with success message
        return redirect()->back()->with('success', 'Image uploaded successfully.');
    }

    public function deleteSliderImage(Request $request)
    {
        // Delete the image file
        $id = $request->id;
        $image = SliderImg::findOrFail($id);
        Storage::delete('public/slider/'.$image->filename);

        // Delete the image record from the database
        $image->delete();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Image deleted successfully.');
    }

}
