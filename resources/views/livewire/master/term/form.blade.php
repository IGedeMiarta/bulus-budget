<div>
    <div id="hs-slide-down-animation-modal" class="hs-overlay hidden ti-modal" wire:ignore.self>
        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-screen m-3 md:mx-auto">
            <div class="ti-modal-content" wire:ignore.self>
                <div class="ti-modal-header">
                    <h3 class="ti-modal-title">
                        {{ $type }} Term
                    </h3>
                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                        data-hs-overlay="#hs-slide-down-animation-modal">
                        <span class="sr-only">Close</span>
                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                fill="currentColor" />
                        </svg>
                    </button>
                </div>
                <form wire:submit.prevent="save" method="POST" wire:ignore.self>
                    <div class="ti-modal-body">
                        <div class="grid grid-rows-2 grid-flow-col gap-4">
                            <div class="row-span-2">

                                <div class="mb-4">
                                    <label for="input-label" class="ti-form-label">Term Name</label>
                                    <input type="text" class="ti-form-input" placeholder="Term Name"
                                        wire:model="term_name">
                                    @error('term_name')
                                        <p class="text-sm text-red-600 mt-2 dark:text-red-500" id="hs-input-helper-text">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="input-label" class="ti-form-label">Start Date</label>
                                    <input type="date" class="ti-form-input" wire:model="start_date">
                                    @error('start_date')
                                        <p class="text-sm text-red-600 mt-2 dark:text-red-500" id="hs-input-helper-text">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="input-label" class="ti-form-label">End Date</label>
                                    <input type="date" class="ti-form-input" wire:model="end_date">
                                    @error('end_date')
                                        <p class="text-sm text-red-600 mt-2 dark:text-red-500" id="hs-input-helper-text">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="input-label" class="ti-form-label">Status</label>
                                    <select name="status" class="ti-form-input" wire:model="status" id="">
                                        <option value="1">Active</option>
                                        <option value="0">Non-Active</option>
                                    </select>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="ti-modal-footer">
                        <button type="button"
                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                            data-hs-overlay="#hs-slide-down-animation-modal">
                            <i class="ti ti-letter-x"></i> Close
                        </button>
                        <button type="submit" class="ti-btn ti-btn-primary">
                            <i class="ti ti-send"></i> Submit Form
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
