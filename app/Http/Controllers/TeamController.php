<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'level' => 'required|string',
            'description' => 'required|string',
            'image' => 'image:jpeg,png,jpg,svg|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('img'), $fileName);

            unset($input['image']);
            $input['image_path'] = $fileName;
        }

        $team = Team::create($input);

        return response()->json([
            'message' => "Team created successfully",
            'team' => $team,
        ]);
    }

    public function all(Request $request)
    {
        return response([
            'message' => "Success",
            'teams' => Team::all(),
        ]);
    }

    public function find(int $id, Request $request)
    {
        return response([
            'message' => "Success",
            'team' => Team::find($id),
        ]);
    }

    public function update(int $id, Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'level' => 'required|string',
            'description' => 'required|string',
            'image' => 'image:jpeg,png,jpg,svg|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('img'), $fileName);

            unset($input['image']);
            $input['image_path'] = $fileName;
        }

        $team = Team::where('id', $id)->update($input);

        return response()->json([
            'message' => "Team updated successfully",
            'team' => $team,
        ]);
    }

    public function delete(int $id, Request $request)
    {
        Team::destroy($id);

        return response()->json([
            'message' => "Team deleted successfully",
        ]);
    }

}
