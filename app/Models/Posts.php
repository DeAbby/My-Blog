<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    /**
* PRODUCT ATTRIBUTES
* $this->attributes['id'] - int - contains the posts primary key (id)
* $this->attributes['title'] - string - contains the post title
* $this->attributes['description'] - string - contains the post description
* $this->attributes['image'] - string - contains the post image
* $this->attributes['date'] - int - contains the date it was uploaded
* $this->attributes['created_at'] - timestamp - contains the product creation date
* $this->attributes['updated_at'] - timestamp - contains the product update date
*/

public function getId()
{
return $this->attributes['id'];
}
public function setId($id)
{
$this->attributes['id'] = $id;
}
public function getTitle()
{
return $this->attributes['title'];
}
public function setTitle($title)
{
$this->attributes['title'] = $title;
}
public function getDate()
{
return $this->attributes['date'];
}
public function setDate($date)
{
$this->attributes['date'] = $date;
}
public function getDescription()
{
return $this->attributes['description'];
}
public function setDescription($description)
{
$this->attributes['description'] = $description;
}
public function getImage()
{
return $this->attributes['image'];
}
public function setImage($image)
{
$this->attributes['image'] = $image;
}
public function getCreatedAt()
{
return $this->attributes['created_at'];
}
public function setCreatedAt($createdAt)
{
$this->attributes['created_at'] = $createdAt;
}
public function getUpdatedAt()
{
return $this->attributes['updated_at'];
}
public function setUpdatedAt($updatedAt)
{
$this->attributes['updated_at'] = $updatedAt;
}


    public function getImageUrl() {
        return asset('storage/'.$this->image);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
