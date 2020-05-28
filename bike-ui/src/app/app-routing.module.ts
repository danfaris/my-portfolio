import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AdminComponent } from './components/admin/admin.component';
import { HomeComponent } from './component/home/home.component';
import { ViewRegistrationComponent } from './components/view-registration/view-registration.component';

//   /:id'

const routes: Routes = [
  {
    path: 'home',
    component: HomeComponent
  },

  {
    path: 'admin/view',
    component: ViewRegistrationComponent
  },
  {
    path: 'admin',
    component: AdminComponent
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
