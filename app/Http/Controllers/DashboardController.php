<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function user()
    {
        $user = Auth::user(); // Retrieve the authenticated user
        // return $user;
        return view('dashboard.index', ['user' => $user]);
    }

    
    
    public function profile_settings()
    {
        $user = Auth::user(); // Retrieve the authenticated user
        // return $user;
        return view('dashboard.settings', ['user' => $user])->with('success', 'User data updated successfully');
    }

    public function create()
    {
        return view('employees.create');
    }
    
    public function index()
    {
        $employees = User::where('role', 'employee')->get();
        // return $employees;
        return view('employees.index', compact('employees'));
    }
    
    public function show($id)
    {
        $user = User::find($id);

        // Check if the user exists
        if ($user) {
            return view('dashboard.index', compact('user'));
        } else {
            return redirect()->route('employees.index')->with('error', 'User not found');
        }
    }


    public function store(Request $request)
    {
        // Validate the input data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'required|string|unique:users',
            'address' => 'nullable|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the image validation rules
            'about' => 'nullable|string',
            'user_skills' => 'nullable|string',
            'designation' => 'nullable|string',
            'dob' => 'nullable|date',
            'doj' => 'nullable|date',
            'github' => 'nullable|string',
            'skype' => 'nullable|string',
            'facebook' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'instagram' => 'nullable|string',
            'twitter' => 'nullable|string',
            'whatsapp_number' => 'nullable|string',
            'cnic' => 'nullable|string',
        ]);

        $validatedData['password'] = Hash::make('password');
        $validatedData['role'] = 'employee';
        
        // Handle the profile picture
        if ($request->hasFile('picture')) {
            $picture = $request->file('picture');
            $picturePath = $picture->store('profile_pictures', 'public'); // Store the image in the 'public' disk
            $validatedData['picture'] = $picturePath;
        }
    
            // return $validatedData;

        // Create and save the employee
        $employee = User::create($validatedData);

        // Redirect or return a response
        return redirect()->route('employees.index')->with('success', 'Employee created successfully!');
    }

    public function edit(User $employee)
    {
        $user=$employee;
        return view('employees.edit', compact('user'));
    }

    public function update(Request $request, User $employee)
    {
         // Validate the input data
        //  $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|email|unique:users',
        //     'phone' => 'required|string|unique:users',
        //     'whatsapp_number' => 'nullable|string',
        //     'address' => 'nullable|string',
        //     'cnic' => 'nullable|string',
        //     'about' => 'nullable|string',
        //     'user_skills' => 'nullable|string',
        // ]);
        
        if (!$employee) {
            return redirect()->route('employees.index')->with('error', 'Employee not found');
        }

        $attributes = $request->only(['name', 'email', 'phone','whatsapp_number', 'address', 'cnic', 'about', 'user_skills']); // Add other fields as needed

        $employee->update($attributes);
        return redirect()->route('employees.index')->with('success', 'Data updated successfully!');
    }

    public function updateProfilePicture(Request $request, User $employee){
        $validatedData = $request->validate([
            'profile_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the validation rules as needed
        ]);
    
        if ($request->hasFile('profile_picture')) {
             // Delete the previous profile picture if it exists
            if ($employee->picture) {
                Storage::delete('public/'.$employee->picture);
            }

            $file = $request->file('profile_picture');
            $path = $file->store('profile_pictures', 'public'); // Save in the storage/app/public/profile_pictures directory

            $employee->picture = $path;
            $employee->save();
        }



        return redirect()->back()->with('success', 'Data updated successfully!');
        // return redirect()->route('employees.index')->with('success', 'Data updated successfully!');
    }

    public function destroy(User $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully!');
    }


    public function profile_settings_picture(Request $request)
    {
        $user = Auth::user();

        if ($request->file('picture')) {
            $file_logo = $request->file('picture');
            $fileName_user = "user_" . time() . '_' . base64_encode($file_logo->getClientOriginalName()) . "." . $file_logo->getClientOriginalExtension();
            $filePath_user = $file_logo->storeAs('uploads', $fileName_user, 'public');
        }

        $user->update([
            'picture' => $fileName_user,
        ]);

        return redirect()->route('profile.settings')->with('success', 'User data updated successfully');
    }

    public function profile_settings_info(Request $request)
    {
        $user = Auth::user();

        $user->update([
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'user_skills' => $request->input('user_skills'),
            'about' => $request->input('about'),
            'designation' => $request->input('designation'),
        ]);

        return redirect()->route('profile.settings')->with('success', 'User data updated successfully');
    }

    public function profile_settings_links(Request $request)
    {
        $user = Auth::user();

        $user->update([
            'github' => $request->input('github'),
            'skype' => $request->input('skype'),
            'instagram' => $request->input('instagram'),
            'facebook' => $request->input('facebook'),
            'linkedin' => $request->input('linkedin'),
            'twitter' => $request->input('twitter'),
        ]);

        return redirect()->route('profile.settings')->with('success', 'User data updated successfully');
    }


}
