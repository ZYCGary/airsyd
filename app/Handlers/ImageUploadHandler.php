<?php


namespace App\Handlers;


use Str;
use Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageUploadHandler
{
    protected $ALLOWED_EXT = ["png", "jpg", "gif", 'jpeg'];

    /**
     * Save a uploaded image under public path.
     *
     * @param UploadedFile $file
     * @param string $folder
     * @param string|integer $file_prefix
     * @param string $client
     * @param bool $max_width
     * @return array|bool
     */
    public function save($file, $folder, $file_prefix, $client, $max_width=false)
    {
        $folder_name = "uploads/$client/images/$folder/" . date("Ym/d", time());
        $upload_path = public_path() . "/" . $folder_name;
        $extension = strtolower($file->getClientOriginalExtension()) ?: 'png';
        $filename = $file_prefix . '_' . time() . '_' . Str::random(10) . '.' . $extension;

        if ( ! in_array($extension, $this->ALLOWED_EXT)) {
            return false;
        }

        $file->move($upload_path, $filename);

        if ($max_width && $extension != 'gif') {

            // 此类中封装的函数，用于裁剪图片
            $this->reduceSize($upload_path . '/' . $filename, $max_width);
        }

        return [
            'path' => config('app.url') . "/$folder_name/$filename"
        ];
    }

    public function reduceSize($file_path, $max_width)
    {
        $image = Image::make($file_path);

        $image->resize($max_width, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });

        $image->save();
    }
}
