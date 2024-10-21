<div>
    <div class="mb-4"><span>Crear Nueva Categoria</span></div>
    <div class="mb-4 ml-4">
      <form wire:submit='enviar'>
        <x-label for="name" value='Nombre de la Categoria'/>
        <x-input for="name" wire:model='name'/>
        <x-label for="description" value='Descripción de la Categoria'/>
        <x-input for="description" wire:model='description'/>
        <br>
        <x-button class="mt-2">Guardar</x-button>
      </form>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Descripcion
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Fecha de Creacion
                    </th>
                </tr>
            </thead>
            @foreach ($categories as $category)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $category->id}}
                  </th>
                  <td class="px-6 py-4">
                    {{ $category->name}}
                  </td>
                  <td class="px-6 py-4">
                    {{ $category->description}}
                  </td>
                  <td class="px-6 py-4">
                  {{ $category->created_at}}
                </td>
            </tr>
            @endforeach
        </table>
    </div>
  </div>


