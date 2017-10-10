import {RouterModule, Routes} from "@angular/router";
import {QuotesComponent} from "./quotes/quotes.component";
import {NewQuoteComponent} from "./new-quote/new-quote.component";
import {ModuleWithProviders} from "@angular/core";

const APP_ROUTES: Routes = [
    {path: '', component: QuotesComponent},
    {path: 'new-quote', component: NewQuoteComponentComponent}
];

export const routing: ModuleWithProvidersders = RouterModule.forRoot(APP_ROUTES);