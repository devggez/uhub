<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Requisition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class LibrarianController extends Controller
{
    public function librarianDashboard()
    {

        return view('librarian.index',[
            'requisitions' => Requisition::where('status','pending')
            ->latest()->get()
        ]);
    }

    public function librarianProfile()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('librarian.librarian_profile_view', compact('profileData'));
    }
    public function librarianProfileStore(Request $request)
    {

        $id = Auth::user()->id;
        $data = User::find($id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;



        if ($request->file('uploadImage')) {
            $file = $request->file('uploadImage');
            @unlink(public_path('uploads/librarian_images/' . $data->photo));
            $fileName = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/librarian_images'), $fileName);
            $data['photo'] = $fileName;
        }

        $data->save();

        $notification = array(
            'message' => 'Profile updated successfuly',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function librarianChangePassword()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('librarian.librarian_change_password', compact('profileData'));
    }


    public function librarianLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function librarianUpdatePassword(Request $request)
    {

        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        if (!Hash::check($request->old_password, auth::user()->password)) {
            $notification = array(
                'message' => 'Old password do not match',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }


        User::find(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        // User::whereId(auth()->user()->id)->update([
        //     'password' => Hash::make($request->new_password)
        // ]);


        $notification = array(
            'message' => 'Password updated successfully',
            'alart-type' => 'success'
        );

        return back()->with($notification);
    }
}
