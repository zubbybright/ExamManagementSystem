<div>
    {{-- The Master doesn't talk, he acts. --}}
    <h1>Add Questions here</h1>
    <form wire:submit.prevent="submit">
        <label for="title">Title</label><br>
        <input type="text" name="title"><br>
        <label for="category">Category:</label><br>
        <input type="text" name="category"><br>
        <label for="option">Option 1:</label><br>
        <input type="text" name="option"><br>
        <label for="option">Option 2:</label><br>
        <input type="text" name="option"><br>
        <label for="option">Option 3:</label><br>
        <input type="text" name="option"><br>
        <label for="option">Option 4:</label><br>
        <input type="text" name="option"><br>
        <button type="submit">submit</button>
        

    </form>

    <h1>Technical Questions:</h1>
    <p class="pr-12" wire:model="technicalQuestions"> {{$technicalQuestions}}</p>
  
        <button wire:submit.prevent="edit" method="POST">edit</button>   
        <br>  <button wire:submit.prevent="delete" method="POST">delete</button> 
    <h1>Aptitude Questions:</h1>
    <p class="pr-12" wire:model="aptitudeQuestions"> {{$technicalQuestions}}</p>
    <button wire:submit.prevent="edit" method="POST">edit</button>   
     <br><button wire:submit.prevent="delete" method="POST">delete</button> 
    <h1>Logical Questions:</h1>
    <p class="pr-12" wire:model="logicalQuestions"> {{$logicalQuestions}}</p>
    <button wire:submit.prevent="edit" method="POST">edit</button>   
    <br>  <button wire:submit.prevent="delete" method="POST">delete</button> 
</div>
