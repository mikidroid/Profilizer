<div class="container mb-4">
      <!--Flash messages -->
              @include('inc.flashMessages')
 <h4>Make Tweets</h4>
 <form wire:submit.prevent="SendAnnounce">
  <input type="text" placeholder="subject" class="mb-2 form-control" wire:model="AnSubject">
  <textarea type="text" placeholder="body.." class="mb-2 form-control" wire:model="AnBody">
   </textarea>
  <button class="btn ml-0 alert-info form-control btn-outline" type="submit">Publish</button>
 </form>
 
  <button class="btn ml-0 alert-info form-control btn-outline" wire:click='ClearAnnounce'>Clear Tweets</button>
 
</div>
<br/>