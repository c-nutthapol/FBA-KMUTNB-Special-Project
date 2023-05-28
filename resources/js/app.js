import './bootstrap';
import { Modal } from 'flowbite';


Livewire.on('close_modal', data => {
    const $targetEl = document.getElementById(data.element);

    const options = {
        backdrop: 'static',
        closable: true,
    };

    const modal = new Modal($targetEl, options);
    modal.hide();
})
