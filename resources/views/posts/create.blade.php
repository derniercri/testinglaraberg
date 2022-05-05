<x-app-layout>
   <div class="post-create">
       @slot('header')
           Créer un post
       @endslot
       <form class="post-create__form" method="post" action="{{ route("posts.store") }}">
           @csrf
           <input name="body" id="content" hidden>

           {{--        <input id="[id_here]" type="textarea" name="[name_here]" value="{{$model->getRawContent()}}" hidden>--}}

           <input class="post-create__form__submit" type="submit"  >
       </form>
   </div>
</x-app-layout>
