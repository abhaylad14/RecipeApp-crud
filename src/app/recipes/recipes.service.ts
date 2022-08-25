import { Injectable } from '@angular/core';
import { Recipe } from './recipe.model';

@Injectable({
  providedIn: 'root'
})
export class RecipesService {

  private recipes: Recipe[] = [
    {
      id: "r1",
      title: "Idli",
      imageUrl: "https://www.indianhealthyrecipes.com/wp-content/uploads/2021/06/idli.jpg",
      ingredients: ["Rice", "Dal", "Chutney"]
    },
    {
      id: "r2",
      title: "Dhosa",
      imageUrl: "https://greenoyard.com/wp-content/uploads/2021/06/MashlaDhosa.jpg",
      ingredients: ["Rice", "Dal", "Potato", "Chutney"]
    },
    {
      id: "r3",
      title: "Mendu vada",
      imageUrl: "https://foodiewish.com/wp-content/uploads/2020/05/Medu-Vada-Recipe-1-300x200.jpg",
      ingredients: ["Maida", "Dal", "Chutney"]
    }
  ];

  constructor() { }

  getAllRecipes(){
    return [...this.recipes];
  }

  getRecipe(recipeId: string){
    return {...this.recipes.find(recipe => {
      return recipe.id === recipeId;
    })}
  }

  deleteRecipe(recipeId: string){
    this.recipes = this.recipes.filter(recipe => {
      return recipe.id !== recipeId;
    });
  }
  // Add Recipe
  addRecipe(recipe: Recipe){
    this.recipes.push(recipe);
    return;
  }

}
