import './bootstrap';
import { Modal } from 'flowbite';


Livewire.on('close_modal', element => {
    $('#createModal').find(`[data-modal-hide='${element}']`).trigger("click");
})
