import './bootstrap';
import '../css/app.css';
import '../sass/app.scss'

$('#toggle').on('click', function () {
    $('.navbar-collapse.collapse').collapse('toggle');
});
