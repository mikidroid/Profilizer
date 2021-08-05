	<div class="card gradient-custom text-white mt-2">
 <div class="card-body">
		 <h4 class="card-title">Send Me A Mail</h4>
		  <form wire:submit.prevent="SendMail" method="POST">
		   <input class="card-text mb-1 form-control" wire:model="sender" type="email" placeholder="Enter your Email">
 <input class="form-control mb-1" type="text" placeholder="Enter Subject" wire:model="subject">
 <textarea class="form-control mb-1" type="text" wire:model="message" placeholder="Enter Message"></textarea>
 <button type="submit" class="btn btn-outline-light">Send</button>
		  </form>
		  
		 </div>
		</div>