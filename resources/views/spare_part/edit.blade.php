<x-layout.default>
    <ul class="flex space-x-2 rtl:space-x-reverse">
        <li>
            <a href="{{ route('spare_part.index') }}" class="text-primary hover:underline">Suku Cadang</a>
        </li>
        <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
            <span>Edit</span>
        </li>
    </ul>

    <div class="pt-5" x-data="form">
        <div class="panel">
            <form @submit.prevent="submitForm()" method="POST" action="{{ route('spare_part.update', $sparePart->id) }}"
                x-ref="form">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div :class="[isSubmitForm ? (form.name ? 'has-success' : 'has-error') : '']">
                        <label for="customName">Nama</label>
                        <input id="customName" type="text" placeholder="Masukkan Nama Suku Cadang!"
                            class="form-input" x-model="form.name" name="name" value="{{ $sparePart->name }}" />
                        <template x-if="isSubmitForm && form.name">
                            <p class="text-success mt-1">Nama suku cadang sudah terisi</p>
                        </template>
                        <template x-if="isSubmitForm && !form.name">
                            <p class="text-danger mt-1">Harap isi nama suku cadang !</p>
                        </template>
                    </div>
                    <div :class="[isSubmitForm ? (form.quantity ? 'has-success' : 'has-error') : '']">
                        <label for="customQuantity">Stok</label>
                        <input id="customQuantity" type="number" placeholder="Masukkan Jumlah Stok!" class="form-input"
                            x-model="form.quantity" name="quantity" value="{{ $sparePart->quantity }}" />
                        <template x-if="isSubmitForm && form.quantity">
                            <p class="text-success mt-1">Jumlah stok sudah terisi</p>
                        </template>
                        <template x-if="isSubmitForm && !form.quantity">
                            <p class="text-danger mt-1">Harap isi jumlah stok yang sesuai!</p>
                        </template>
                    </div>
                </div>
                <div class="pt-5">
                    <div :class="[isSubmitForm ? (form.price ? 'has-success' : 'has-error') : '']">
                        <label for="customPrice">Harga</label>
                        <input id="customPrice" type="number" placeholder="Masukkan Jumlah Harga!" class="form-input"
                            x-model="form.price" name="price" value="{{ $sparePart->price }}" />
                        <template x-if="isSubmitForm && form.price">
                            <p class="text-success mt-1">Jumlah harga sudah terisi</p>
                        </template>
                        <template x-if="isSubmitForm && !form.price">
                            <p class="text-danger mt-1">Harap isi jumlah harga!</p>
                        </template>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-6">Simpan</button>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data('form', () => ({
                form: {
                    name: '{{ $sparePart->name }}',
                    quantity: '{{ $sparePart->quantity }}',
                    price: '{{ $sparePart->price }}',
                },

                isSubmitForm: false,
                submitForm() {
                    this.isSubmitForm = true;
                    if (this.form.name && this.form.quantity && this.form.price) {
                        this.$refs.form.submit();
                        this.showMessage('Data berhasil disimpan', 'success');
                    } else {
                        this.showMessage('Harap isi semua form', 'error');
                    }
                },

                showMessage(msg = '', type = 'success') {
                    const toast = window.Swal.mixin({
                        toast: true,
                        position: 'top',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    });

                    toast.fire({
                        icon: type,
                        title: msg,
                    });
                },
            }));
        });
    </script>
</x-layout.default>
