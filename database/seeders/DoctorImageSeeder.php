<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DoctorImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ini_set('max_execution_time', '3600');

        $imageDirectory = public_path('Doctors'); // Ensure correct path

        // Check if the directory exists
        if (!File::exists($imageDirectory)) {
            dump('🚨 Directory does not exist: ' . $imageDirectory);
            return;
        }

        // Get all PNG files inside the directory
        $images = File::files($imageDirectory);

        dump('Files found:', array_map(fn($file) => $file->getFilename(), $images));

        foreach ($images as $image) {
            $filename = $image->getFilename();
            $extension = strtolower($image->getExtension());

            // ✅ Accept only PNG files
            if ($extension !== 'png') {
                dump('🚫 Skipped file: ' . $filename . ' (only PNG allowed)');
                continue;
            }

            // Extract user ID from filename (assuming filename is "5.png", "6.png", etc.)
            $id = pathinfo($filename, PATHINFO_FILENAME);

            if (!is_numeric($id)) {
                dump('❌ Skipping file: ' . $filename . ' (Invalid ID)');
                continue;
            }

            $user = User::where('id', $id)->where('user_type', 2)->first();

            if ($user) {
                $imagePath = 'profiles/' . $user->id;
                $storagePath = storage_path('app/public/' . $imagePath); // Full directory path

                // ✅ Ensure directory exists before copying
                if (!File::exists($storagePath)) {
                    File::makeDirectory($storagePath, 0755, true); // Recursive directory creation
                    dump('📁 Directory created for user ID: ' . $user->id);
                }

                $destinationPath = $storagePath . '/' . $filename;

                // ✅ Ensure source file exists before copying
                if (!File::exists($image->getPathname())) {
                    dump('🚨 Source file missing: ' . $image->getPathname());
                    continue;
                }

                // Copy image to storage
                File::copy($image->getPathname(), $destinationPath);

                // Update user record
                $user->image_url = $imagePath . '/' . $filename;
                $user->save();

                dump('✅ Updated image for user ID: ' . $user->id . ' - Path: ' . $user->image_url);
            } else {
                dump('❌ User not found for ID: ' . $id);
            }
        }
    }
}
