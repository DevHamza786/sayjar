<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdPost;

class ShareController extends Controller
{
   public function share($postId)
{
    // Retrieve the post or content you want to share (replace this with your logic)
    $post = Post::find($postId);

    // Generate the URLs and share messages for each platform
    $facebookShareUrl = 'https://www.facebook.com/sharer/sharer.php?u=' . url('/posts/' . $post->id);
    $twitterShareUrl = 'https://twitter.com/intent/tweet?text=' . urlencode($post->title . ': ' . url('/posts/' . $post->id));
    $linkedinShareUrl = 'https://www.linkedin.com/shareArticle?mini=true&url=' . url('/posts/' . $post->id);

    // WhatsApp share link
    $whatsappShareUrl = 'https://api.whatsapp.com/send?text=' . urlencode($post->title . ': ' . url('/posts/' . $post->id));

    return view('home.share', compact('facebookShareUrl', 'twitterShareUrl', 'linkedinShareUrl', 'whatsappShareUrl'));
}
}
