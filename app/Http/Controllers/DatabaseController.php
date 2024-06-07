<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
    public function index()
    {
        // Connect to the database
        $conn = DB::connection('mysql');

        // Run a query to retrieve all users
        $users = $conn->table('users')->get();

        // Return the users
        return $users;
    }

    public function create()
    {
        // Connect to the database
        $conn = DB::connection('mysql');

        // Run a query to create a new user
        $conn->table('users')->insert([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com'
        ]);

        // Return a success message
        return 'User created successfully!';
    }

    public function update($id)
    {
        // Connect to the database
        $conn = DB::connection('mysql');

        // Run a query to update a user
        $conn->table('users')->where('id', $id)->update([
            'name' => 'Jane Doe',
            'email' => 'janedoe@example.com'
        ]);

        // Return a success message
        return 'User updated successfully!';
    }

    public function delete($id)
    {
        // Connect to the database
        $conn = DB::connection('mysql');

        // Run a query to delete a user
        $conn->table('users')->where('id', $id)->delete();

        // Return a success message
        return 'User deleted successfully!';
    }
}
?>