$(document).ready(function() {
    // Adding a comment
    $('#addComment').click(function (event){
        event.preventDefault();
        const form = $("#commentForm")[0];
        const formData = new FormData(form);
        fetch('/comment', {
            method: 'POST',
            body: formData,
        }).then(response => response.text())
            .then(result => console.log(result))
            .catch(err => console.log(err))
    })

    $("#createPostInput").click(function() {
        $("#createPost").removeClass("hidden");
    })

    $("#showCommentSection").click(function() {
        $("#commentSection").removeClass("hidden");
    })

    $("#hideCommentSection").click(function() {
        $("#commentSection").addClass("hidden");
    })

    $("#hideCreatePost").click(function() {
        $("#createPost").addClass("hidden");
    })

    $('.commentSection').click(function (){
        let id = $(this).attr('id');
        $(`#${id}`).removeClass('hidden');
    })

})



