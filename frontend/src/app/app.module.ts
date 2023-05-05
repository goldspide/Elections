import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { RegionComponent } from './component/region/region.component';
import { ReactiveFormsModule } from '@angular/forms';
import { ParticipantComponent } from './component/participant/participant.component';
import { HttpClientModule } from '@angular/common/http';
import { BulletinComponent } from './component/bulletin/bulletin.component';
import { VoteComponent } from './component/vote/vote.component';
import { ElectionComponent } from './component/election/election.component';

@NgModule({
  declarations: [
    AppComponent,
    RegionComponent,
    ParticipantComponent,
    BulletinComponent,
    VoteComponent,
    ElectionComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    ReactiveFormsModule,
    HttpClientModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
