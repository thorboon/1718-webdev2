import { Category } from 'src/app/core/models/Category';
import { Component, OnInit } from '@angular/core';
import { CategoryService } from 'src/app/core/services/category.service';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.scss']
})
export class HeaderComponent implements OnInit {
  public categories: Category[];

  constructor(private _categoryService: CategoryService) { }

  ngOnInit() {
    this.getCategories();
  }

  getCategories() {
    return this._categoryService.getCategories().subscribe(
      data => {
        this.categories = data;
        console.log(data);
      }
    );
  }
}
