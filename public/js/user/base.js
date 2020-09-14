class user {
    sideMenu () {
        $('.sidebar li').click(function () {
            $('.sidebar li a').removeClass('active');
            $(this).find('a[data-target="#dashboard"]').addClass('active')
            $(this).find('a[data-target="#dashboard"]').find('span.fa').toggleClass('fa-chevron-down').toggleClass('fa-chevron-left');
        });
        $('#dashboard.sub-menu li').click(function () {
            $('#dashboard.sub-menu li').removeClass('active');
            $(this).addClass('active');
        });
        $('.list-sidebar li').click(function () {
            $('.list-sidebar li a').removeClass('active');
            $(this).find('> a').addClass('active');
        });
    }

    autoLoad () {
        this.sideMenu();
    }
}

$(document).ready(function(){
    (new user()).autoLoad();
});
