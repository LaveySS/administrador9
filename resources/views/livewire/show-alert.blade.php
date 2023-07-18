<div class="mb-5">
    @if (session()->has('message'))
        <div id="closeAlert" class="p-4 rounded-md bg-green-50">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="w-5 h-5 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-green-800">{{ session('message') }}</p>
                </div>
            </div>
        </div>
    @endif
    @push('scripts')
        <script>
            const myTimeout = setTimeout(myGreeting, 10000);

            function myGreeting() {
                document.getElementById("closeAlert").style.display = "none"
            }
        </script>
    @endpush
</div>
