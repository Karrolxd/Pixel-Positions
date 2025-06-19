<x-layout>
    <x-page-heading>Rejestracja</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input label="Imię" name="name" />
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Hasło" name="password" type="password" />
        <x-forms.input label="Potwierdź Hasło" name="password_confirmation" type="password" />

        <x-forms.divider />

        <x-forms.input label="Nazwa Firmy" name="employer" />
        <x-forms.input label="Logo Firmy" name="logo" type="file" />

        <x-forms.button>Zarejestruj Się</x-forms.button>
    </x-forms.form>
</x-layout>
