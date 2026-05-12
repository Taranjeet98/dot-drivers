<div class="flex flex-col gap-y-4">
    {{-- Section Title --}}
    <div class="sm:px-2 bg-slate-200 dark:bg-white/10 rounded-lg">
        <div class="flex items-center px-3 gap-1 py-4 text-zinc-500 dark:text-white/80">
            {{ $title }}
        </div>
    </div>

    {{-- Accordion Card --}}
    <div x-data="{ open: false }" class="bg-white dark:bg-white/10 border border-zinc-200 dark:border-white/10 p-6 rounded-xl">
        {{-- Accordion Header --}}
        <button
            type="button"
            @click="open = !open"
            class="flex items-center justify-between w-full text-left rounded-lg px-4 py-3 bg-slate-100 dark:bg-zinc-700 text-zinc-800 dark:text-white font-semibold">
            <span>Driver Information</span>
            <svg class="w-5 h-5 transition-transform duration-200" :class="open ? 'rotate-180' : ''" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        {{-- Accordion Content --}}
        <div x-show="open" x-collapse class="mt-4">
            <x-form.card title="Driver Information">
    {{-- Top row: 4 columns --}}
    <div class="grid grid-cols-1 sm:grid-cols-4 gap-6">
        <x-form.input label="First Name" model="form.first_name" required />
        <x-form.input label="Middle Name" model="form.middle_name" />
        <x-form.input label="Last Name" model="form.last_name" required />

        <x-form.select
            label="Suffix"
            model="form.suffix"
            placeholder=" "
            :options="[
                'II' => 'II',
                'III' => 'III',
                'IV' => 'IV',
                'Jr' => 'Jr',
                'Sr' => 'Sr',
            ]"
        />
    </div>

    {{-- Business + EIN row (like screenshot) --}}
    <div class="grid grid-cols-1 sm:grid-cols-4 gap-6 mt-6">
        <div class="sm:col-span-2">
            <x-form.input label="Business Name" model="form.business_name" />
        </div>

        <div class="sm:col-span-2">
            <x-form.input
                label="Employer identification number"
                model="form.employer_identification_number"
                placeholder="99-9999999"
                x-mask="99-9999999"
            />
        </div>
    </div>

    {{-- Tax classification (full width) --}}
    <div class="mt-6">
        <x-form.radio-group
            label="Check appropriate box for federal tax classification"
            model="form.business_tax"
            :options="[
                'individual' => 'Individual/sole proprietor',
                'c_corp' => 'C Corporation',
                's_corp' => 'S Corporation',
                'llc' => 'LLC',
            ]"
        />
    </div>

    {{-- DOB + SSN --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-8 mt-6">
        <x-form.input
            label="Date of Birth"
            model="form.dob"
            placeholder="MM/DD/YYYY"
            required
            x-mask="99/99/9999"
        />

        <x-form.input
            label="SSN"
            model="form.ssn"
            placeholder="XXX-XX-XXXX"
            required
            x-mask="999-99-9999"
        />
    </div>

    {{-- Phone row (3 cols like screenshot) --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-x-10 gap-y-8 mt-6">
        <x-form.input
            label="Main Phone Number"
            model="form.main_phone_number"
            placeholder="(999) 999-9999"
            required
            x-mask="(999) 999-9999"
        />

        <x-form.input
            label="Emergency Phone Number"
            model="form.emergency_phone_number"
            placeholder="(999) 999-9999"
            x-mask="(999) 999-9999"
        />

        <x-form.input
            label="Email Address"
            type="email"
            model="form.email"
            required
        />
    </div>

    {{-- Address + City --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-x-10 gap-y-8 mt-6">
        <div class="md:col-span-2">
            <x-form.input label="Address" model="form.address" placeholder="Enter a location" required/>
        </div>

        <x-form.input
            label="City"
            model="form.city"
        />
    </div>

    {{-- State / Country / Postal --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-x-10 gap-y-8 mt-6">
        <x-form.select
            label="State"
            model="form.state"
            required
            placeholder="Choose state..."
            :options="$states ?? []"
        />

        <x-form.input
            label="Country"
            model="form.country"
            placeholder="United States"
        />

        <x-form.input
            label="Postal Code"
            model="form.postal_code"
            required
        />
    </div>

    {{-- TWIC + Passport --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-8 mt-6">
        <x-form.select
            label="Do you have a TWIC Card?"
            model="form.has_twic"
            required
            placeholder="Select..."
            :options="['yes' => 'Yes', 'no' => 'No']"
        />

        <x-form.select
            label="Do you have a passport?"
            model="form.has_passport"
            required
            placeholder="Select..."
            :options="['yes' => 'Yes', 'no' => 'No']"
        />
    </div>

    {{-- Button --}}
    <div class="mt-8">
        <x-form.button type="submit">Continue</x-form.button>
    </div>
</x-form.card>

        </div>
    </div>
</div>