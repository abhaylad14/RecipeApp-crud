import { Component, OnInit, Output, EventEmitter } from '@angular/core';
import { Router } from '@angular/router';
import { Recipe } from '../recipe.model';
import { RecipesService } from '../recipes.service';

@Component({
  selector: 'app-add-recipe',
  templateUrl: './add-recipe.page.html',
  styleUrls: ['./add-recipe.page.scss'],
})

export class AddRecipePage implements OnInit {

  id: string;
  title: string;
  imageUrl: string;
  ingredients:string;
  recipe: Recipe;

  constructor(private router: Router, private recipesService: RecipesService) { }

  ngOnInit() {
  }

  onSubmit(){
    let myingredients = this.ingredients.split(",");
    this.recipe = {
      id: this.id,
      title: this.title,
      imageUrl: this.imageUrl,
      ingredients: myingredients
    }
    this.recipesService.addRecipe(this.recipe); 
    this.router.navigate(['/recipes']);
  }

}
