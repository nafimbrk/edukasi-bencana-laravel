<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrizeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth', 'admin']);
    // }

    public function index()
    {
        // 🔥 Ambil satu-satunya hadiah (atau null jika belum ada)
        $prize = Prize::first();
        return view('admin.prizes.index', compact('prize'));
    }

    public function store(Request $request)
    {
        // 🔥 Jika sudah ada hadiah, update; jika belum, create baru
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|max:2048',
        ]);

        $prize = Prize::first();
        
        if ($prize) {
            // Update existing
            if ($request->hasFile('image')) {
                if ($prize->image) Storage::disk('public')->delete($prize->image);
                $validated['image'] = $request->file('image')->store('prizes', 'public');
            }
            $prize->update($validated);
            $message = 'Hadiah berhasil diperbarui!';
        } else {
            // Create new
            if ($request->hasFile('image')) {
                $validated['image'] = $request->file('image')->store('prizes', 'public');
            }
            Prize::create($validated);
            $message = 'Hadiah berhasil ditambahkan!';
        }

        return redirect()->route('admin.prizes.index')->with('success', $message);
    }

    public function update(Request $request, Prize $prize)
    {
        // 🔥 Sama seperti store, tapi explicit update
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($prize->image) Storage::disk('public')->delete($prize->image);
            $validated['image'] = $request->file('image')->store('prizes', 'public');
        }

        $prize->update($validated);

        return redirect()->route('admin.prizes.index')
                         ->with('success', 'Hadiah berhasil diperbarui!');
    }

    public function destroy(Prize $prize)
    {
        if ($prize->image) Storage::disk('public')->delete($prize->image);
        $prize->delete();

        return redirect()->route('admin.prizes.index')
                         ->with('success', 'Hadiah berhasil dihapus!');
    }
}