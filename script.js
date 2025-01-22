// Fungsi untuk membuat animasi transisi antar halaman
function pageTransition() {
    // Tambahkan kelas page-transition pada elemen yang ingin dianimasikan
    const pageTransitionElement = document.querySelector('.page-transition');
    pageTransitionElement.classList.add('page-transition-enter');

    // Tambahkan event listener pada elemen yang ingin dianimasikan
    pageTransitionElement.addEventListener('transitionend', () => {
        // Hapus kelas page-transition-enter setelah animasi selesai
        pageTransitionElement.classList.remove('page-transition-enter');
    });
}

// Panggil fungsi pageTransition saat halaman dimuat
document.addEventListener('DOMContentLoaded', pageTransition);