import { ContactPageComponent } from './contact/contact-page/contact-page.component';
import { GdprPageComponent } from './legal/gdpr-page/gdpr-page.component';
import { CookiePageComponent } from './legal/cookie-page/cookie-page.component';
import { ServicesPageComponent } from './legal/services-page/services-page.component';
import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AuctionPageComponent } from './auctions/auction-page/auction-page.component';
import { HomePageComponent } from './home/home-page/home-page.component';
import { LoginPageComponent } from './auth/login/login-page/login-page.component';
import { RegisterPageComponent } from './auth/register/register-page/register-page.component';
import { AuctionDetailComponent } from 'src/app/auctions/auction-detail/auction-detail.component';

const routes: Routes = [
  { path: '', redirectTo: '/home', pathMatch: 'full' },
  { path: 'home', component: HomePageComponent },
  { path: 'contact', component: ContactPageComponent },
  { path: 'veilingen', component: AuctionPageComponent },
  { path: 'veilingen/:id', component: AuctionDetailComponent },
  { path: 'login', component: LoginPageComponent },
  { path: 'register', component: RegisterPageComponent },
  { path: 'voorwaarden', component: ServicesPageComponent },
  { path: 'cookiebeleid', component: CookiePageComponent },
  { path: 'gdpr', component: GdprPageComponent },
  { path: '**', redirectTo: '/404'},
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes)
  ],
  declarations: [],
  exports: [
    RouterModule
  ]
})
export class AppRoutingModule { }
