
<div class="mx-auto max-w-7xl space-y-6">

    <!-- Header -->
    <div class="flex items-center justify-between  py-4 flex-col lg:flex-row  md:flex-row gap-3">

        <!-- Left -->
        <div class="flex items-center gap-4">

            <div
                class="w-12 h-12 rounded-xl bg-blue-600 flex items-center justify-center px-3 py-2">

                <i class="bi bi-person-vcard text-white text-[20px]"></i>

            </div>

            <div>

                <h1 class="text-[32px] leading-none font-medium text-slate-900">
                    Driver Management
                </h1>

                <p class="text-sm opacity-50 text-slate-500 mt-1">
                    Manage driver qualifications, documents, and compliance
                </p>

            </div>

        </div>

        <!-- Right -->
        <div class="flex items-center gap-5">

            <button
                class="rounded-xl py-2 px-3  me-2 bg-blue-600 hover:bg-blue-700 text-white font-medium text-sm flex items-center gap-2 transition">

                <i class="bi bi-plus-lg text-[15px]"></i>

                Add New Driver

            </button>

            <button
                class="w-10 h-10 flex items-center justify-center text-slate-600 hover:bg-gray-100 rounded-lg">

                <i class="bi bi-three-dots-vertical text-[20px]"></i>

            </button>

        </div>

    </div>



<div>
  <!-- Tabs -->
<div class="border-b border-gray-200 pb-4 w-full overflow-x-auto whitespace-nowrap">
    <div class="flex items-center justify-between h-[58px] ">

        <!-- Left (Tabs) -->
        <div class="flex h-full">

            <!-- All -->
            <button class="px-5 h-full flex items-center text-[15px] font-medium text-gray-500 hover:text-gray-700 transition-colors">
                All
            </button>

            <!-- Active (Selected Tab) -->
            <button class="px-5 h-full flex items-center border-b-2 border-blue-600 text-[15px] font-medium text-blue-600">
                Active
                <span class="badgedt successone ml-2 inline-flex h-6 min-w-[30px] items-center justify-center rounded-lg bg-success/10 px-2 text-[12px] font-medium leading-none text-success">
                    (15)
                </span>
            </button>

            <!-- New -->
            <button class="px-5 h-full flex items-center text-[15px] font-medium text-gray-500 hover:text-gray-700 transition-colors">
                New
            </button>

            <!-- Pending -->
            <button class="px-5 h-full flex items-center text-[15px] font-medium text-gray-500 hover:text-gray-700 transition-colors">
                Pending
                <span class="badgedt warningone ml-2 inline-flex h-6 min-w-[30px] items-center justify-center rounded-lg bg-yellow-500/10 px-2 text-[12px] font-medium leading-none text-yellow-600">
                    (3)
                </span>
            </button>

            <!-- Rejected -->
            <button class="px-5 h-full flex items-center text-[15px] font-medium text-gray-500 hover:text-gray-700 transition-colors">
                Rejected
            </button>

            <!-- Inactive -->
            <button class="px-5 h-full flex items-center text-[15px] font-medium text-gray-500 hover:text-gray-700 transition-colors">
                Inactive
                <span class="badgedt deleteone ml-2 inline-flex h-6 min-w-[30px] items-center justify-center rounded-lg bg-red-500/10 px-2 text-[12px] font-medium leading-none text-red-600">
                    (21)
                </span>
            </button>

        </div>

        <!-- Right (Alert Status) -->
        <div class="flex items-center space-x-3 pr-5">
            <i class="bi bi-exclamation-circle text-red-500 text-[16px]"></i>
            <span class="h-6 px-2.5 rounded-lg bg-red-500/10 text-red-600 text-[12px] font-medium flex items-center">
                1 expired
            </span>
        </div>

    </div>
</div>

<div class="p-4 mt-4 border rounded">

    <!-- Toolbar -->
    <div class="flex items-center justify-between mb-8">

        <div class="flex items-center gap-4">

            <!-- Search -->
            <div class="relative">
                <i class="bi bi-search absolute left-10 top-1/2 -translate-y-1/2 text-slate-400 text-lg" style="
    transform: translateY(-50%);left:10px;
"></i>

                <input
                    wire:model.live.debounce.500ms="search"
                    type="text"
                    placeholder="Search drivers..."
                    class="w-[480px] h-12 rounded-2xl border border-slate-200 bg-white px-6 py-2 ronded text-[15px] text-slate-700 placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 outline-none transition-all duration-200" style="padding-left: 36px;">
            </div>

            <!-- Filter -->
            <button
                class="h-12 px-3 py-2 rounded-2xl border border-slate-200 bg-white hover:bg-slate-50 flex items-center gap-2 text-[15px] font-medium text-slate-700 transition">

                <i class="bi bi-funnel-fill"></i>

                Filters

            </button>

        </div>

        <div class="flex items-center gap-4">

            <!-- Columns -->
            <button
                class="h-12 px-3 py-2 rounded-2xl border border-slate-200 bg-white hover:bg-slate-50 flex items-center gap-3 transition">

                <i class="bi bi-layout-three-columns text-slate-700"></i>

                <span class="text-[15px] font-medium">Columns</span>

                <span class="w-7 h-7 rounded-lg bg-orange-100 text-orange-600 flex items-center justify-center text-xs font-semibold">
                    2
                </span>

            </button>

            <!-- Per Page -->
            <select style="height: 45px;"
                wire:model.live="perPage"
                class=" w-24 rounded-2xl border border-slate-200 bg-white px-3 py-2 text-[15px] focus:ring-4 focus:ring-blue-100 focus:border-blue-500">

                <option>10</option>
                <option>25</option>
                <option>50</option>

            </select>

        </div>

    </div>

    <!-- Table -->
    <div class="overflow-hidden rounded-2xl">

        <table class="w-full mt-3">

            <thead class="theaderone">

                <tr class="border-b border-slate-200 text-[14px] font-medium text-slate-500">

                    

                    <th class="text-left pb-5" colspan="2">Name</th>

                    <th class="text-left pb-5">Status</th>

                    <th class="text-left pb-5">DOB</th>

                    <th class="text-left pb-5">CDL</th>

                    <th class="text-left pb-5">State</th>

                    <th class="text-left pb-5">License Exp.</th>

                    <th class="text-left pb-5">Med Card Exp.</th>

                    <th class="text-left pb-5">Hire Date</th>

                    <th class="text-right pb-5">Actions</th>

                </tr>

            </thead>

            <tbody>

                @forelse($drivers as $driver)

                <tr class="border-b border-slate-100 hover:bg-slate-50 transition duration-200">

                    <!-- Select -->
                    <td class="py-5">

                        <div class="w-10 h-10 rounded-full border-2 border-slate-300 flex items-center justify-center hover:border-blue-500 hover:bg-blue-50 cursor-pointer transition">

                            <i class="checkeroneTable bi bi-check text-slate-500 text-lg"></i>

                        </div>

                    </td>

                    <!-- Driver -->
                    <td class="py-5">

                        <div class="font-semibold uppercase tracking-wide text-[15px] text-slate-700">

                            {{ $driver->name }}

                        </div>

                        <div class="mt-0 text-[15px] text-slate-500">

                            {{ $driver->email }}

                            <span class="mx-1">·</span>

                            {{ $driver->phone }}

                        </div>

                    </td>

                    <!-- Status -->
                    <td>

                        <span class="statusone inline-flex items-center rounded-xl bg-emerald-100 px-4 py-2 text-[13px] font-medium text-emerald-700">

                            {{ $driver->status }}

                        </span>

                    </td>

                    <td class="text-[15px] text-slate-600">
                        {{ \Carbon\Carbon::parse($driver->dob)->format('m/d/Y') }}
                    </td>

                    <td class="font-medium text-slate-700">
                        {{ $driver->cdl }}
                    </td>

                    <td class="text-slate-600">
                        {{ $driver->state }}
                    </td>

                    <td class="text-slate-600">
                        {{ \Carbon\Carbon::parse($driver->license_expiry)->format('m/d/Y') }}
                    </td>

                    <td class="text-slate-600">
                        {{ \Carbon\Carbon::parse($driver->medical_expiry)->format('m/d/Y') }}
                    </td>

                    <td class="text-slate-600">
                        {{ \Carbon\Carbon::parse($driver->hire_date)->format('m/d/Y') }}
                    </td>

                    <!-- Actions -->
                    <td class="text-right">

                        <button
                            class="w-10 h-10 rounded-xl hover:bg-slate-100 transition">

                            <i class="bi bi-three-dots-vertical text-slate-500"></i>

                        </button>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="10" class="py-24">

                        <div class="flex flex-col items-center">

                            <div class="w-20 h-20 rounded-full bg-slate-100 flex items-center justify-center">

                                <i class="bi bi-person-x text-3xl text-slate-400"></i>

                            </div>

                            <h3 class="mt-4 text-lg font-semibold text-slate-700">

                                No Drivers Found

                            </h3>

                            <p class="mt-1 text-slate-500">

                                Try searching with another keyword.

                            </p>

                        </div>

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

    <!-- Pagination -->
    <div class="mt-7 flex items-center justify-between">

        <div class="text-sm text-slate-500 dftr">

            Showing

            <span class="font-semibold text-slate-700">
                {{ $drivers->firstItem() ?? 0 }}
            </span>

            -

            <span class="font-semibold text-slate-700">
                {{ $drivers->lastItem() ?? 0 }}
            </span>

            of

            <span class="font-semibold text-slate-700">
                {{ $drivers->total() }}
            </span>

            drivers

        </div>

        {{ $drivers->links() }}

    </div>

</div>

</div>