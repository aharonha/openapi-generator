/*
 * OpenAPI Petstore
 *
 * This is a sample server Petstore server. For this sample, you can use the api key `special-key` to test the authorization filters.
 *
 * API version: 1.0.0
 * Generated by: OpenAPI Generator (https://openapi-generator.tech)
 */

package petstoreserver

import (
	"context"
	"net/http"
	"os"
)



// PetApiRouter defines the required methods for binding the api requests to a responses for the PetApi
// The PetApiRouter implementation should parse necessary information from the http request,
// pass the data to a PetApiServicer to perform the required actions, then write the service results to the http response.
type PetApiRouter interface { 
	AddPet(http.ResponseWriter, *http.Request)
	DeletePet(http.ResponseWriter, *http.Request)
	FindPetsByStatus(http.ResponseWriter, *http.Request)
	// Deprecated
	FindPetsByTags(http.ResponseWriter, *http.Request)
	GetPetById(http.ResponseWriter, *http.Request)
	UpdatePet(http.ResponseWriter, *http.Request)
	UpdatePetWithForm(http.ResponseWriter, *http.Request)
	UploadFile(http.ResponseWriter, *http.Request)
}
// StoreApiRouter defines the required methods for binding the api requests to a responses for the StoreApi
// The StoreApiRouter implementation should parse necessary information from the http request,
// pass the data to a StoreApiServicer to perform the required actions, then write the service results to the http response.
type StoreApiRouter interface { 
	DeleteOrder(http.ResponseWriter, *http.Request)
	GetInventory(http.ResponseWriter, *http.Request)
	GetOrderById(http.ResponseWriter, *http.Request)
	PlaceOrder(http.ResponseWriter, *http.Request)
}
// UserApiRouter defines the required methods for binding the api requests to a responses for the UserApi
// The UserApiRouter implementation should parse necessary information from the http request,
// pass the data to a UserApiServicer to perform the required actions, then write the service results to the http response.
type UserApiRouter interface { 
	CreateUser(http.ResponseWriter, *http.Request)
	CreateUsersWithArrayInput(http.ResponseWriter, *http.Request)
	CreateUsersWithListInput(http.ResponseWriter, *http.Request)
	DeleteUser(http.ResponseWriter, *http.Request)
	GetUserByName(http.ResponseWriter, *http.Request)
	LoginUser(http.ResponseWriter, *http.Request)
	LogoutUser(http.ResponseWriter, *http.Request)
	UpdateUser(http.ResponseWriter, *http.Request)
}


// PetApiServicer defines the api actions for the PetApi service
// This interface intended to stay up to date with the openapi yaml used to generate it,
// while the service implementation can be ignored with the .openapi-generator-ignore file
// and updated with the logic required for the API.
type PetApiServicer interface { 
	AddPet(context.Context, Pet) (ImplResponse, error)
	DeletePet(context.Context, int64, string) (ImplResponse, error)
	FindPetsByStatus(context.Context, []string) (ImplResponse, error)
	// Deprecated
	FindPetsByTags(context.Context, []string) (ImplResponse, error)
	GetPetById(context.Context, int64) (ImplResponse, error)
	UpdatePet(context.Context, Pet) (ImplResponse, error)
	UpdatePetWithForm(context.Context, int64, string, string) (ImplResponse, error)
	UploadFile(context.Context, int64, string, os.File) (ImplResponse, error)
}


// StoreApiServicer defines the api actions for the StoreApi service
// This interface intended to stay up to date with the openapi yaml used to generate it,
// while the service implementation can be ignored with the .openapi-generator-ignore file
// and updated with the logic required for the API.
type StoreApiServicer interface { 
	DeleteOrder(context.Context, string) (ImplResponse, error)
	GetInventory(context.Context) (ImplResponse, error)
	GetOrderById(context.Context, int64) (ImplResponse, error)
	PlaceOrder(context.Context, Order) (ImplResponse, error)
}


// UserApiServicer defines the api actions for the UserApi service
// This interface intended to stay up to date with the openapi yaml used to generate it,
// while the service implementation can be ignored with the .openapi-generator-ignore file
// and updated with the logic required for the API.
type UserApiServicer interface { 
	CreateUser(context.Context, User) (ImplResponse, error)
	CreateUsersWithArrayInput(context.Context, []User) (ImplResponse, error)
	CreateUsersWithListInput(context.Context, []User) (ImplResponse, error)
	DeleteUser(context.Context, string) (ImplResponse, error)
	GetUserByName(context.Context, string) (ImplResponse, error)
	LoginUser(context.Context, string, string) (ImplResponse, error)
	LogoutUser(context.Context) (ImplResponse, error)
	UpdateUser(context.Context, string, User) (ImplResponse, error)
}
