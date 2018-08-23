import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

import { User } from 'src/app/core/models/User';

import { environment } from './../../../environments/environment';

@Injectable({
  providedIn: 'root'
})
export class UserService {
  private API_URL = `${environment.api.url}`;

  constructor(private http: HttpClient) { }

  getUsers() {
    return this.http.get<User[]>(this.API_URL + '/users');
  }

  getUserById(id: number) {
    return this.http.get(this.API_URL + '/users/' + id);
  }

  create(user: User) {
    return this.http.post(this.API_URL + '/users', user);
  }

  update(user: User) {
    return this.http.put(this.API_URL + '/users' + user.id, user);
  }

  delete(id: number) {
    return this.http.delete(this.API_URL + '/users' + id);
  }
}
