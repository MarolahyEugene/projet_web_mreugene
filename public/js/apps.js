
$('.list-menu .item').click(function (e) {

    e.preventDefault()

    $('.main-content').css('transition', '1s')
    var $a = $(this)
    var $li = $a.parent()
    if ($('.croix').hasClass('close')) {
        $('.croix').removeClass('close')
    }

    $li.siblings('.active').removeClass('active')
    $li.addClass('active')

    $('.list-menu.active .lien').show()
    $('.main-content').css('margin-left', '240px')
});

$('.menu-cours span a').click(function (e) {

    // e.preventDefault()

    var $span = $(this).parent()

    if ($span.hasClass('active')) {
        $span.removeClass('active')
    }
    $span.siblings('.active').removeClass('active')
    $span.addClass('active')

});

$('.sous-menu span a').click(function (e) {

    // e.preventDefault()

    var $span = $(this).parent()

    if ($span.hasClass('active')) {
        $span.removeClass('active')
    }
    $span.siblings('.active').removeClass('active')
    $span.addClass('active')

});

$('.menu-portfolio span a').click(function (e) {

    // e.preventDefault()

    var $span = $(this).parent()

    if ($span.hasClass('active')) {
        $span.removeClass('active')
    }
    $span.siblings('.active').removeClass('active')
    $span.addClass('active')

});

$('.croix').click(function (e) {
    e.preventDefault()

    $('.main-content').css('transition', '1s')
    $('.lien').hide()
    $('.main-content').css('margin-left', '0px')
    $('.croix').addClass('close')
});

$('.fa-bell-o,.notif-compteur').click(function (e) {
    e.preventDefault();
    $('.notifications').toggleClass('actif');
});


function toggleModal(action, elem_trigger) {
    elem_trigger.addEventListener('click', function () {
        if (action == 'add') {
            let modal_id = this.dataset.modal;
            document.getElementById(`${modal_id}`).classList.add('modal-is-open');
        } else {
            // Automaticlly get the opned modal ID
            let modal_id = elem_trigger.closest('.modal-wrapper').getAttribute('id');
            document.getElementById(`${modal_id}`).classList.remove('modal-is-open');
        }
    });
}


// Check if there is modals on the page
// if (document.querySelector('.modal-wrapper')) {


// ================ MODAL POUR AGENDA ===============

if (document.querySelector('.modal.modal-add-agenda')) {
    // Open the modal
    document.querySelectorAll('.modal-trigger').forEach(btn => {
        toggleModal('add', btn);
    });

    // close the modal
    document.querySelectorAll('.close-modal').forEach(btn => {
        toggleModal('remove', btn);
    });
}

if (document.querySelector('.modal.parametre-user')) {
    // Open the modal
    document.querySelectorAll('.modal-trigger').forEach(btn => {
        toggleModal('add', btn);
    });

    // close the modal
    document.querySelectorAll('.close-modal').forEach(btn => {
        toggleModal('remove', btn);
    });
}

// ================ FIN MODAL POUR AGENDA ===============


// ================ DEBUT PARAMETRE ===============

if (document.querySelector('.parametre-user')) {
    // Open the modal
    document.querySelectorAll('.modal-trigger').forEach(btn => {
        toggleModal('add', btn);
    });

    // close the modal
    document.querySelectorAll('.close-modal').forEach(btn => {
        toggleModal('remove', btn);
    });
}

// ================ FIN PARAMETRE ===============

if (document.querySelector('.calendar-events')) {

    document.querySelectorAll('.modal-trigger').forEach(btn => {
        toggleModal('add', btn);
    });

    // close the modal
    document.querySelectorAll('.close-modal').forEach(btn => {
        toggleModal('remove', btn);
    });

};

if (document.querySelector('.calendar-today')) {

    document.querySelectorAll('.modal-trigger').forEach(btn => {
        toggleModal('add', btn);
    });

    // close the modal
    document.querySelectorAll('.close-modal').forEach(btn => {
        toggleModal('remove', btn);
    });

};

if (document.querySelector('.calendar-day')) {

    document.querySelectorAll('.modal-trigger').forEach(btn => {
        toggleModal('add', btn);
    });

    // close the modal
    document.querySelectorAll('.close-modal').forEach(btn => {
        toggleModal('remove', btn);
    });

};


// ===========  Flexibilité des pages  ==============

// ------------- Begin Setting ---------------
$puser = document.querySelector('.parametre-profile');

if ($puser.width == 530) {
    console.log('Cest le moment de faire la flexion de la page');
}


// ------------- End Setting ---------------