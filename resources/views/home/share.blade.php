@extends('home.layouts.app')
<div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="shareModalLabel">Share Content</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="share-buttons">
                    <a href="{{ $facebookShareUrl }}" target="_blank" class="share-button">Share on Facebook</a>
                    <a href="{{ $twitterShareUrl }}" target="_blank" class="share-button">Share on Twitter</a>
                    <a href="{{ $linkedinShareUrl }}" target="_blank" class="share-button">Share on LinkedIn</a>
                </div>
            </div>
        </div>
    </div>
</div>