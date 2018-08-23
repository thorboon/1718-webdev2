import { AuctionService } from './core/services/auction.service';

import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { AppRoutingModule } from './app-routing.module';
import { CoreModule } from './core/core.module';
import { HttpClientModule } from '@angular/common/http';

import { AppComponent } from './app.component';
import { HomePageComponent } from './home/home-page/home-page.component';
import { AuctionPageComponent } from './auctions/auction-page/auction-page.component';
import { LoginPageComponent } from './auth/login/login-page/login-page.component';
import { RegisterPageComponent } from './auth/register/register-page/register-page.component';
import { AuctionDetailComponent } from './auctions/auction-detail/auction-detail.component';
import { ServicesPageComponent } from './legal/services-page/services-page.component';
import { CookiePageComponent } from './legal/cookie-page/cookie-page.component';
import { GdprPageComponent } from './legal/gdpr-page/gdpr-page.component';
import { ContactPageComponent } from './contact/contact-page/contact-page.component';
import { AuctionRowComponent } from './auctions/auction-row/auction-row.component';



@NgModule({
  declarations: [
    AppComponent,
    HomePageComponent,
    AuctionPageComponent,
    LoginPageComponent,
    RegisterPageComponent,
    AuctionDetailComponent,
    ServicesPageComponent,
    CookiePageComponent,
    GdprPageComponent,
    ContactPageComponent,
    AuctionRowComponent,
  ],
  imports: [
    BrowserModule,
    CoreModule,
    AppRoutingModule,
    HttpClientModule
  ],
  providers: [AuctionService],
  bootstrap: [AppComponent]
})
export class AppModule { }
