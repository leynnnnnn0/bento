$(document).ready(function() {
    // downvote
    $('#downvoteSubmit').click(function (event){
        const form = $('downvoteForm')[0];
        const formData = new FormData(form);
        fetch('/downvote', {
            method: "POST",
            body: formData
        }).then(response => response.text())
            .then(result => console.log(result))
            .catch(err => console.log(err));
    });
    // upvote
    $('#upvoteSubmit').click(function (event){
       const form = $('upvoteForm')[0];
       const formData = new FormData(form);
       fetch('/upvote', {
           method: "POST",
           body: formData
       }).then(response => response.text())
           .then(result => console.log(result))
           .catch(err => console.log(err));
    });
    // Adding a comment
    $('#addComment').click(function (event){
        event.preventDefault();
        const form = $("#commentForm")[0];
        const formData = new FormData(form);
        fetch('/comment', {
            method: 'POST',
            body: formData,
        }).then(response => response.text())
            .then(result => {
                document.getElementById("commentBody").value = "";
            })
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



