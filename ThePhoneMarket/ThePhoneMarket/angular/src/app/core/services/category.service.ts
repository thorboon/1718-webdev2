import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

import { Category } from 'src/app/core/models/Category';

import { environment } from './../../../environments/environment';


@Injectable({
  providedIn: 'root'
})

export class CategoryService {
  private API_URL = `${environment.api.url}`;

  constructor(private http: HttpClient) { }

  getCategories() {
    return this.http.get<Category[]>(this.API_URL + '/categories');
  }
}
