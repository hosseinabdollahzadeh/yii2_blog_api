<?php

namespace frontend\resource;

class Post extends \common\models\Post
{
//    public function fields()
//    {
//        return ['id', 'title', 'body'];
//    }

    public function extraFields()
    {
        return ['comments', 'created_by', 'created_at', 'updated_at'];
    }

    /**
     * Gets query for [[Comments]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\CommentQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::class, ['post_id' => 'id']);
    }
}