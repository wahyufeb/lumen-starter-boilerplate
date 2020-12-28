<?php

namespace App\BusinessLayer;

use Intervention\Image\Facades\Image;
use Ramsey\Uuid\Nonstandard\UuidV6;
use Ramsey\Uuid\Uuid;

class GenericBusinessLayer {

  public function convertImage($params)
  {
    $imageType = $params->getClientOriginalExtension();
    $imageResize = Image::make($params)->resize(null, 90, function ( $constraint ) {
        $constraint->aspectRatio();
    })->encode('data-url');

    return $imageResize;
  }

  public function generateUuid()
  {
    $uuid = Uuid::uuid6();
    $result = $uuid->toString();
    return $result;
  }

}