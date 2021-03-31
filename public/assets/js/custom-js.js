
$('.ugro-video-tile').each(function(){
    var dataViews = $(this).find('.fb-views').text();
    $(this).attr('fb-views',dataViews);
    var data = $(this).find('h5').text();
    $(this).attr('data-name',data);
    var data = $(this).find('h5').text();
    $(this).attr('data-name',data);
    var fbComment = $(this).find('.fb-comments').text();
    $(this).attr('fb-comments',fbComment);
    $(this).find('#sa-position').click(() => {
        if($(this).find('#sa-position').attr("class") == "mdi mdi-star"){
            $(this).find('#sa-position').attr("class","mdi mdi-star-outline");
            // $.ajax(
            //     {
            //         'url'  : location.origin + "/fbad/favourite_store",
            //         'type' : "POST",
            //         'data' : {
            //             _token : $('meta[name="_token"]').attr("content"),
            //             title  : "123456789",
            //             group  : "23456789",
            //             url    : "123456789"
            //         },
            //         success: function(response){if(response){console.log(response)}},
            //         error: function(response){alert('Error'+response)}
            //     }
            // )
        }else{
            $(this).find('#sa-position').attr("class","mdi mdi-star")
        }
    })
    $(this).find('video').click(() => {
        $(this).attr({"data-toggle":"modal","data-target":"#pop-up-ads"});
        $('#pop-up-ads').find(".modal-header h3").text($(this).find('.card-title').text());
        $('#pop-up-ads').find(".modal-header img").attr("src",$(this).find('img').attr("src"));
        const modal_des_lng = $(this).find('.poster-description').text().replace( /\s/g, '').length;
        if(modal_des_lng > 30){
            const sliced_des = $(this).find('.poster-description').text().slice(0, 100);
            $('#pop-up-ads').find(".modal-body .modal-description p").text(sliced_des + "...");
            $('#pop-up-ads').find(".modal-body .modal-description div").css("display","block");
        }else{
            $('#pop-up-ads').find(".modal-body .modal-description div").css("display","none");
        };
        $(this).parent().find('#pop-up-ads video').attr("poster",$(this).find('.videocontainer .previewVideo').attr("poster"));
    });
    $('#pop-up-ads').find(".modal-body .modal-description div").click(() => {
        if($('#pop-up-ads').find(".modal-body .modal-description div").text() == "Read More"){
            $('#pop-up-ads').find(".modal-body .modal-description div").text("Read Less");
            $('#pop-up-ads').find(".modal-body .modal-description p").text($(this).find('.poster-description').text());
        }else{
            $('#pop-up-ads').find(".modal-body .modal-description div").text("Read More");
            const sliced_des = $(this).find('.poster-description').text().slice(0, 100);
            $('#pop-up-ads').find(".modal-body p").text(sliced_des + "...");
        }
    });
});

// In Right Side, Show user comments list
const commented_userCounter = Math.round(Math.random() * 14);
for (var i = 1; i <= commented_userCounter; i++) {
    $('.comments-board').append('<div class="row" id ="user-' + i + '"></div>');
};
$('.comments-board').each(function(){
    $(this).find('div').each(function(){
        $(this).append('<div></div>');
        var clone = $(this).find('div').clone(true);
        $(this).find('div').parent().append(clone);
    })
});

// Sort the Advertisments alphabetically, by the views, comments, shares, ratio, etc...
$('.alphabetically').click(function(){
    var $wrap = $('.ads');
    $wrap.find('.ugro-video-tile').sort(function(x,y){
        return x.getAttribute("data-name") > y.getAttribute("data-name")? 1 : -1;
    }).appendTo($wrap);
});
$('.sort-ads').click(function(){
    var $wrap = $('.ads');
    $wrap.find('.ugro-video-tile').sort(function(x,y){
        return x.getAttribute("fb-views") > y.getAttribute("fb-views")? -1 : 1;
    }).appendTo($wrap);
});
$('.sort-viewed').click(function(){
    var $wrap = $('.ads');
    $wrap.find('.ugro-video-tile').sort(function(x,y){
        return x.getAttribute("fb-views") > y.getAttribute("fb-views")? -1 : 1;
    }).appendTo($wrap);
});
$('.sort-commended').click(function(){
    var $wrap = $('.ads');
    $wrap.find('.ugro-video-tile').sort(function(x,y){
        return x.getAttribute("fb-comments") > y.getAttribute("fb-comments")? -1 : 1;
    }).appendTo($wrap);
});

// Search by the Group tags, Page name
function get_id(a_id){
    return document.getElementById(a_id);
}
function close_all() {
    for (i = 0; i < 999; i++) {
        var o = get_id("product_" + i);
        if (o) {
            o.style.display = "none";
        }
    }
        
}

function find_ads(){
    close_all();
    var o_edit = get_id("edit_search");
    var str_needle = edit_search.value;
    str_needle = str_needle.toUpperCase();
    var searchStrings = str_needle.split(/\W/);
    
    // I moved this loop outside
    var nameDivs = document.getElementsByClassName("name");
    for (var j = 0, divsLen = nameDivs.length; j < divsLen; j++) {

        // set a counter to zero
        var num = 0;

        // I moved this loop inside
        for (var i = 0, len = searchStrings.length; i < len; i++) {
            var currentSearch = searchStrings[i].toUpperCase();
            // only run the search if the text input is not empty (to avoid a blank)
            if (str_needle !== "") {
                // if the term is found, add 1 to the counter
                if (nameDivs[j].textContent.toUpperCase().indexOf(currentSearch) !== -1) {
                    num++;
                }
                // display only if all the terms where found
                if (num == searchStrings.length) {
                    nameDivs[j].style.display = "block";
                }
                
            }else{
                location.reload();
            }
        }
    }
}

// Import Data into DataBase, After scraped all info from Facebook Ads Library. ajax request into Controller => Model => Migration => Database.
document.querySelector('#download_facebook_ads').onclick = () => {
    let fb_ad_title = $('input[name$="title"]');
    let fb_ad_group = $('input[name$="group"]');
    let fb_ad_url = $('input[name$="url"]');
    var today = new Date();
    var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    $.ajax({
            'url': location.origin + 'fbad/store',
            'type': 'POST',
            'data': {
                _token: $('meta[name="_token"]').attr("content"),
                title : fb_ad_title.val(), 
                group : fb_ad_group.val(), 
                url : fb_ad_url.val(),
                logo_img_url : "uploads/avatar",
                publish_time : date,
                description : "...........................",
                main_img_or_video : "/uploads/lesson/1609850236k5W.mp4",
                emoji : "joke",
                views : Math.floor(Math.random() * 1140),
                comments : Math.floor(Math.random() * 2345),
                share : Math.floor(Math.random() * 9876),
                ratio : Math.floor(Math.random() * 4567),
                star : 0,
            },
            success: function(response){if(response){console.log(response)}},
            error: function(response){alert('Error'+response)}
        });
    var current_progress = 0;
    var interval = setInterval(() => {
        current_progress += 5;
        $('#progress-bar')
        .css("width", current_progress + "%")
        .attr("aria-valuenow", current_progress);
        if(current_progress >= 100){
            clearInterval(interval);
        }
    }, 500);
}

// Reduce the code ling by using javascript loops in Nav li button.
let list_icon_arr = ["far fa-gem", "dripicons-star", "dripicons-folder", "fab fa-rocketchat", "fas fa-file-invoice"];
let list_name_arr = ["Proven_Winners","My Favourites", "My Ad Library", "My Ads", "Thumbnail vault"];
let list_tab_id = ["proven-winner", "my-favourite", "my-ad-library", "my-ads", "thumbnail-vault"];
for(var i = 0; i < list_icon_arr.length; i ++){
    $('.ugro-nav-pills').append('<li class="nav-item waves-effect waves-light btn-rounded"><a class="nav-link" data-toggle="tab" href="#' + list_tab_id[i] + '" role="tab"><span class="d-block d-sm-none"><i class="fas fa-home"></i></span><span class="d-none d-sm-block"><i class="' + list_icon_arr[i] + '"></i>&nbsp;' +  list_name_arr[i] + '</span></a></li>');
}

// In Thumbnail tab, The star click event.
const signLike = () => {
    const reviewingStarStatus = $('#thumbnail-star');
    if(reviewingStarStatus.attr("class") == "mdi mdi-star"){
       reviewingStarStatus.attr("class","mdi mdi-star-outline");
       $("body").click(function(event){
           if(event.target.id == "thumbnail-star"){
                const willProcessEle = event.target;
                const clone_Ele = $($(willProcessEle).parent().parent().clone());
                $(willProcessEle).parent().parent().remove();
                $('.normal-group').append(clone_Ele);
           }
        })
    }else{
        reviewingStarStatus.attr("class","mdi mdi-star");
        const thumbnailDiv = document.getElementsByClassName("favourite-group");
        $("body").click(function(event){
            if(event.target.id == "thumbnail-star"){
                const willProcessEle = event.target;
                const clone_Ele = $(willProcessEle).parent().parent();
                $(willProcessEle).parent().parent().remove();
                $(".favourite-group").append(clone_Ele);
            }
        })
        if(thumbnailDiv.length == 0){
            thumbnailDiv.css("display","none");
        }
    }
}

