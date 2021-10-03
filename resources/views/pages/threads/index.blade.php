<x-guest-layout>
  <main class="wrapper">
    <section class="grid grid-cols-4 gap-8 mt-8">

      <x-partials.sidenav />

      {{-- Render the Threads from threads.blade.php component --}}
      <div class="flex flex-col col-span-3 gap-y-4">
        @foreach ($threads as $thread)
          <x-thread :thread="$thread" />
        @endforeach

        {{-- ThreadController -> Render the Paginate components --}}
        <div class="mt-4">
          {{ $threads->render() }}
        </div>
      </div>

    </section>
  </main>
</x-guest-layout>
