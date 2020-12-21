import { BrowserRouter, Route, Switch } from 'react-router-dom';
import '../node_modules/bootstrap/dist/css/bootstrap.min.css';
import './App.css';


function App() {
  return (
   
    <div className="App">
            <div class="frame">
        
        
        <form class="login_form" id="aa">

        <div className="form-group">
                <label>User Name</label>
                <input type="text" className="form-control" placeholder="User Name"></input>
              </div>

              <div className="form-group">
                <label>Password</label>
                <input type="password" className="form-control" placeholder="Password"></input>
              </div>

              <button className="btn btn-primary btn-block">Login</button>
              

        </form>
        </div>
      
    </div>
    
  );
}

export default App;
