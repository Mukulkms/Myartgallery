<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ImageGallery;
use Sightengine\SightengineClient;
use App\Models\User;


class ImageGalleryController extends Controller
{


    
    public function index()
    {
    	$images = ImageGallery::get();
    	return view('image-gallery',compact('images'));
    }


   
    public function upload(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $input['title'] = $request->title;
        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);
    
        // Check for nudity using Sightengine
        $client = new SightengineClient('569517757', 'ZqTXGXkRRigpBddgotym');
        $response = $client->check(['nudity'])->set_file(public_path('images/'.$input['image']));
    
        if ($response->status == 'success' && $response->nudity->raw >= 0.5) {
            // Nudity detected, delete the uploaded image
            unlink(public_path('images/'.$input['image']));
            return back()->with('error', 'Image contains nudity and was not uploaded.');
        }
        
        $input['user_id'] = auth()->user()->id; // add user_id to input array
        ImageGallery::create($input);
    
        return back()->with('success','Image Uploaded successfully.');
    }
    


    public function destroy($id)
    {
        $image = ImageGallery::findOrFail($id);

         // Check if user is authenticated
    if (!auth()->check()) {
        return back()->with('error', 'You cannot delete someone content.');
    }
    
        // Only allow the owner of the image to delete it
        if ($image->user_id !== auth()->user()->id) {
            return back()->with('error', 'You are not authorized to perform this action.');
        }
    
        $filename = $image->image;
        $path = public_path('images/'.$filename);
        if (file_exists($path) && !is_dir($path)) {
            unlink($path);
        }
        $image->delete();
        return redirect()->back()->with('success', 'Image deleted successfully.');
    }
    




}

