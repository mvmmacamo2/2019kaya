export const apiUrl = 'http://localhost:8000/'
export const apiRequest = apiUrl + 'api/'
export const LoginUrl = apiUrl + 'oauth/token'
export const CreateAccountUrl = apiRequest + 'create-acount'
export const userUrl = apiRequest + 'user'
export const updateAvatar = apiRequest + 'update-avatar-user'
export const updatePerfilUrl = apiRequest + 'update-user'
export const getHeader = function () {
  const tokenData = JSON.parse(window.localStorage.getItem('authUser'))
  const headers = {
    'Accept': 'application/json',
    'Authorization': 'Bearer ' + tokenData.access_token
  }
  return headers
}
