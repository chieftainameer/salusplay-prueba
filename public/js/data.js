const mainSection = $('.main-section');
const toggleBtn = $('#toggle-btn');
let posts,photos = [];

async function getData(event) {

    await fetch("https://jsonplaceholder.typicode.com/posts")
        .then((res) => res.json())
        .then((data) => {
            posts = data.slice(0, 5);
        })

    await fetch("https://jsonplaceholder.typicode.com/photos")
        .then((res) => res.json())
        .then((data) => {
            photos = data.slice(0, 5);
            console.log(photos);
        })

    mainSection.toggle();
   btnToggle();

    showData();
}

function showData()
{
    for (let i = 0; i < posts.length; i++) {
        if (i === 0){
            showTrendingPost();
        }
        else if (i === 4)
        {
           showPopularPost();
        }
    }

    $('#trending-posts article').each(function(index,value){
        $article = $(this);
        var $thumbnail = $article.find('.thumbnail img');
        $title = $article.find('.details .title');
        $thumbnail.attr('src',photos[index+1].url);
        $title.text(posts[index+1].title);
    })
}

function showTrendingPost()
{
    $('#top-post .article-thumbnail img').attr('src',photos[0].url);
    $('#top-post .article-title h5').text(posts[0].title);
    $('#top-post .article-description p').html(formatText($(this),posts[0].body));
}

function showPopularPost()
{
    $('#popular-post .article-thumbnail img').attr('src',photos[4].url);
    $('#popular-post .article-title h5').text(posts[4].title);
    $('#popular-post .article-description p').html(formatText($(this),posts[4].body));
}

function formatText(item,text)
{
    if (text.length > 100) {
        var truncatedText = text.substring(0, 100);
        var remainingText = text.substring(100);

        var $dotsSpan = $('<span>').attr('id', 'dots').text('...');

        var $moreSpan = $('<span>').attr('id', 'more').text(remainingText);

        return truncatedText + ' ' + $dotsSpan.prop('outerHTML') + $moreSpan.prop('outerHTML');
    }
}

function btnToggle()
{
    let buttonText = toggleBtn.text();
    if (buttonText === 'hide') {
        toggleBtn.text('show');
    } else {
        toggleBtn.text('hide');
    }
    toggleBtn.toggleClass('hide-btn');
}

$(document).ready(function(){
    mainSection.hide();

    $('.read-btn').on('click',function(){
        console.log('clicked');
        let $text = $(this).closest('.article-description');
        let $content = $text.find('#more');
        let $dots = $text.find('#dots');
        $content.toggle();
        $dots.toggle();
        let buttonText = $(this).text();
        if (buttonText === 'read more') {
            $(this).text('read less');
        } else {
            $(this).text('read more');
        }

    });
});

