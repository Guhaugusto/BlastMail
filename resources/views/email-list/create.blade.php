<x-layouts.app>
    <x-slot name="header">
        <x-h2>{{ __('Email List') }} > {{ __('Create new list') }}</x-h2>
    </x-slot>

    <x-card>
        <x-form action="route('email-list.store')" post>

            <div class="flex  items-center space-x-4">

                <x-secondary-button type="reset">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-primary-button type="submite">
                    {{ __('Save') }}
                </x-primary-button>

            </div>

        </x-form>
        
    </x-card>
</x-layouts.app>