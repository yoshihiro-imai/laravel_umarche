<x-tests.app>
  <x-slot name="header">
    
  </x-slot>
  <x-tests.card title="タイトル" content="本文" :message="$message" />
  <x-tests.card title="タイトル２" />
  <x-tests.card title="CSSを変えたい" class="bg-red-300" />

  <x-test-class-base classBaseMessage="メッセージクラス" ></x-test-class-base>
  <div class="mb-4"></div>
  <x-test-class-base classBaseMessage="メッセージクラス" defaultMessage="初期値から変更しました" ></x-test-class-base>
</x-tests.app>