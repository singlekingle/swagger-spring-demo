package at.fwd.swagger.spring.demo.user.controller;

import org.apache.log4j.Logger;

import java.util.concurrent.ConcurrentHashMap;
import java.util.concurrent.ConcurrentMap;

import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.bind.annotation.RestController;

import at.fwd.swagger.spring.demo.user.exception.ObjectNotFoundException;
import at.fwd.swagger.spring.demo.user.model.State;
import at.fwd.swagger.spring.demo.user.model.User;

import com.wordnik.swagger.annotations.Api;
import com.wordnik.swagger.annotations.ApiOperation;
import com.wordnik.swagger.annotations.ApiResponse;
import com.wordnik.swagger.annotations.ApiResponses;

/**
 * Basic User CRUD Controller
 * supports GET + POST
 * 
 * @author johannes.fiala@fwd.at
 *
 */
@RestController
@Api(value="user-crud", position=2, description ="User CRUD services")
public class UserController {
	/**
	 * Logger for this class
	 */
	private static final Logger log = Logger.getLogger(UserController.class);

	private ConcurrentMap<Long, User> userMap = new ConcurrentHashMap<Long, User>();
	
	public UserController() {
		log.debug("setting up usercontroller");
		User firstUser = new User();
		firstUser.setName("Test");
		firstUser.setId(new Long(1));
		firstUser.setState(State.ACTIVE);
		firstUser.setBytes(new Byte[] {48, 49});
		userMap.put(firstUser.getId(), firstUser);
		
		
	}
	 
    @RequestMapping(method=RequestMethod.GET, value="/user")
    @ResponseBody
    @ApiOperation(value="read User by ID", notes="pass ID to read user", position = 2)
    @ApiResponses(value = {
    	    @ApiResponse(code = 200, message = "Successful retrieval of user detail", response = User.class),
    	    @ApiResponse(code = 404, message = "User not found") })
    public User getUser(@RequestParam(value="id", required=true) Long id) {
		log.debug("getUser"); 
		User user = userMap.get(id); 
		
    	if (user!=null) {
    		return user;	
    	} else {
    		throw new ObjectNotFoundException("User not found (id=" + id + ")");
    	}
    }
    
    
    @RequestMapping(method=RequestMethod.POST, value="/user")
    @ApiOperation(value="create or update a user name by id", position = 1)
    @ApiResponses(value = {
    	    @ApiResponse(code = 200, message = "User has been updated", response = User.class) })
    public User saveUser(@RequestParam(required=true) Long id, 
    		@RequestParam(required=true) String name) {
    	User user = userMap.get(id);

    	if (user==null) {
    		user = new User();
    		user.setId(id);
    		user.setName(name);
        	userMap.put(id,  user);

    	} else {
    		user.setName(name);
    	}
    	
    	return user;
    }
    
    
	public ConcurrentMap<Long, User> getUserMap() {
		return userMap;
	}

	public void setUserMap(ConcurrentMap<Long, User> userMap) {
		this.userMap = userMap;
	}
    
    
}